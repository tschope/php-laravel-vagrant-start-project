<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::where('order', 1)
                    ->orderBy('from', 'asc')
                    ->get();
        return response()->json($trips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trip = new Trip([
            'trip_group' => $request->get('trip_group'),
            'connection_text' => $request->get('connection_text'),
            'connection_id' => $request->get('connection_id'),
            'type_transport' => $request->get('type_transport'),
            'departure' => $request->get('departure'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'gate' => $request->get('gate'),
            'seat' => $request->get('seat'),
            'luggage_transfer' => $request->get('luggage_transfer'),
            'order' => $request->get('order'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        $trip->save();
        return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $trip = Trip::where('trip_group', $id)
            ->orderBy('order', 'asc')
            ->get();

        return response()->json($this->tripStep($trip));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::find($id);
        return response()->json($trip);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trip = Trip::find($id);
        $trip->trip_group = $request->get('trip_group');
        $trip->connection_text = $request->get('connection_text');
        $trip->connection_id = $request->get('connection_id');
        $trip->type_transport = $request->get('type_transport');
        $trip->departure = $request->get('departure');
        $trip->from = $request->get('from');
        $trip->to = $request->get('to');
        $trip->gate = $request->get('gate');
        $trip->seat = $request->get('seat');
        $trip->luggage_transfer = $request->get('luggage_transfer');
        $trip->order = $request->get('order');
        $trip->created_at = \Carbon\Carbon::now();
        $trip->updated_at = \Carbon\Carbon::now();
        $trip->save();

        return response()->json('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = Trip::find($id);
        $trip->delete();

        return response()->json('Successfully Deleted');
    }

    /**
     * Filter lines results
     *
     * @param array $trip_step
     * @return string sentence step trip
     */

    private function tripStep($trip_steps){

        $text = [];
        foreach($trip_steps as $id => $step)
        {
            $text[$id] = [];
            $tmp = '';
            if($step->connection_id != 0)
            {
                $trip_d = Trip::find($step->connection_id);
                $tmp .= $step->connection_text.' '.$trip_d->to.', ';
            }

            $tmp .= 'take '.$step->type_transport.' '.$step->departure;

            if(!empty($step->from))
                $tmp .= ' from '.$step->from;

            if(!empty($step->to))
                $tmp .= ' to '.$step->to.'. ';


            if(!empty($step->gate) && !empty($step->seat))
            {
                if(!empty($step->gate))
                    $tmp .= 'Gate '.$step->gate.', seat '.$step->seat.'. ';
            }
            else
            {
                if(!empty($step->gate))
                    $tmp .= 'Gate '.$step->gate.'. ';

                if(!empty($step->seat))
                    $tmp .= 'Sit in seat '.$step->seat.'. ';
            }

            if(!empty($step->luggage_transfer))
                $tmp .= $step->luggage_transfer;

            $text[$id]['message'] = ucfirst($tmp);
        }

        $text[]['message'] = 'You have arrived at your final destination.';

        return $text;

    }

}
