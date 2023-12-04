<?php

namespace App\Http\Controllers;

use App\Models\CloudHosting;
use App\Models\Domain;
use App\Models\OtherService;
use App\Models\Testimonial;
use App\Models\TypeDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cloud_hostings = CloudHosting::orderBy('price_after_discount','desc')->get();
        $other_services = OtherService::orderBy('price','asc')->get();
        $type_domains = TypeDomain::find([1,2,3,4]);
        $all_type_domains = TypeDomain::orderBy('name','asc')->get();
        $testimonials = Testimonial::all();

        return view('welcome', compact('cloud_hostings', 'other_services', 
        'type_domains', 'all_type_domains', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function find_domain(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'type_domain' => 'required',
        ]);

        $name = strtolower(str_replace(' ','', $request->name));

        $domains = DB::table('domains')
        ->join('type_domains', 'type_domains.id', '=', 'domains.type_domain_id')
        ->where('domains.name', $name)
        ->where('type_domains.id', $request->type_domain)
        ->first();

        $type_domain = TypeDomain::find($request->type_domain);
        $domain_name = $name.'.'.$type_domain->name;
        $available_domains = DB::table('type_domains')
        ->select('type_domains.name', 'type_domains.price')
        ->whereNotIn('type_domains.id',function($query) use ($name){
        $query->select('type_domains.id')->from('type_domains')
        ->join('domains', 'domains.type_domain_id', '=', 'type_domains.id')
        ->where('domains.name', $name);
        })
        ->where('type_domains.id','!=', $request->type_domain)
        ->get();

        $domain_count = $available_domains->count();

        // dd($available_domains);

        if ($domains != null) {
            return redirect('/#domain')
            ->with(['domain_name' => $domain_name])
            ->with(['name' => $name])
            ->with('domains', $available_domains)
            ->with('domain_count', $domain_count)
            ->with(['error' => 'Domain Tidak Tersedia.']);

        } else {
            return redirect('/#domain')
            ->with(['domain_name' => $domain_name])
            ->with(['name' => $name])
            ->with('domains', $available_domains)
            ->with('domain_count', $domain_count)
            ->with(['success' => 'Domain Tersedia']);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
