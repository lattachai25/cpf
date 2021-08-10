<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::all();
        return view('user.contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/Contact/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = new contact([
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'google_code' => $request->input('google_code'),
            'facrbook_code' => $request->input('facrbook_code'),
            'orteh_code' => $request->input('orteh_code'),

            'text_title_en' => $request->input('text_title_en'),
            'text_title_th' => $request->input('text_title_th'),
            'address_en' => $request->input('address_en'),
            'address_th' => $request->input('address_th'),
            'faceboot_link_en' => $request->input('faceboot_link_en'),
            'faceboot_link_th' => $request->input('faceboot_link_th'),
            'line_link_en' => $request->input('line_link_en'),
            'line_link_th' => $request->input('line_link_th'),

            'tel_link_en' => $request->input('tel_link_en'),
            'tel_link_th' => $request->input('tel_link_th'),
            'mobile_link_en' => $request->input('Mobile_link_en'),
            'mobile_link_th' => $request->input('Mobile_link_th'),
            'Email_link1_en' => $request->input('Email_link1_en'),
            'Email_link1_th' => $request->input('Email_link1_th'),
            'Email_link2_en' => $request->input('Email_link2_en'),
            'Email_link2_th' => $request->input('Email_link2_th'),
            'link_map' => $request->input('link_map')

            ]);

          $input->save();

          return redirect('Contact/show')->with('success', 'ได้ทำการเพิ่มข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        $contact = Contact::all();
        return view('admin/Contact/index', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact, $id)
    {
        //
        $contact = Contact::find($id);
        return view('admin/Contact/edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact,$id)
    {
        //
        $contact = contact::find($id);
        $contact->title = $request->get('title');
        $contact->keywords = $request->get('keywords');
        $contact->description = $request->get('description');
        $contact->google_code = $request->get('google_code');
        $contact->facrbook_code = $request->get('facrbook_code');
        $contact->orteh_code = $request->get('orteh_code');

        $contact->text_title_en = $request->get('text_title_en');
        $contact->text_title_th = $request->get('text_title_th');
        $contact->address_en = $request->get('address_en');
        $contact->address_th = $request->get('address_th');
        $contact->faceboot_link_en = $request->get('faceboot_link_en');
        $contact->faceboot_link_th = $request->get('faceboot_link_th');
        $contact->line_link_en = $request->get('line_link_en');
        $contact->line_link_th = $request->get('line_link_th');
        $contact->tel_link_en = $request->get('tel_link_en');
        $contact->tel_link_th = $request->get('tel_link_th');
        $contact->mobile_link_en = $request->get('mobile_link_en');
        $contact->mobile_link_th = $request->get('mobile_link_th');
        $contact->Email_link1_en = $request->get('Email_link1_en');
        $contact->Email_link1_en = $request->get('Email_link1_en');
        $contact->Email_link2_en = $request->get('Email_link2_en');
        $contact->Email_link2_en = $request->get('Email_link2_en');
        $contact->link_map = $request->get('link_map');

        $contact->save();
        return redirect('Contact/show')->with('success', 'ได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact, $id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/Contact/show')->with('success', 'ได้ทำการลบข้อมูล เรียบร้อยแล้ว');
    }
}
