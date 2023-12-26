@extends('layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <h4 class="card-title">Book A Trip</h4>
                            <div class="basic-form">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name (Required)</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>From</label>
                                        <select id="inputStartingPoint" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>Dhaka</option>
                                            <option>Chattagram</option>
                                            <option>Cox's Bazar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>To</label>
                                        <select id="inputEndingPoint" class="form-control">
                                            <option selected="selected">Choose...</option>
                                            <option>Dhaka</option>
                                            <option>Chattagram</option>
                                            <option>Cox's Bazar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Phone No.(Required)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Number of Passengers (Required)</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Your Seats (Hold <code>SHIFT</code> to Choose More Than One
                                        Seat)(Required)</label>
                                    <select multiple="multiple" class="form-control" id="sel2">
                                        <option>A1</option>
                                        <option>A2</option>
                                        <option>A3</option>
                                        <option>A4</option>
                                        <option>B1</option>
                                        <option>B2</option>
                                        <option>B3</option>
                                        <option>B4</option>
                                        <option>C1</option>
                                        <option>C2</option>
                                        <option>C3</option>
                                        <option>C4</option>
                                        <option>D1</option>
                                        <option>D2</option>
                                        <option>D3</option>
                                        <option>D4</option>
                                        <option>E1</option>
                                        <option>E2</option>
                                        <option>E3</option>
                                        <option>E4</option>
                                        <option>F1</option>
                                        <option>F2</option>
                                        <option>F3</option>
                                        <option>F4</option>
                                        <option>F1</option>
                                        <option>F2</option>
                                        <option>F3</option>
                                        <option>F4</option>
                                        <option>G1</option>
                                        <option>G2</option>
                                        <option>G3</option>
                                        <option>G4</option>
                                        <option>G5</option>
                                        <option>G6</option>
                                    </select>
                                </div>
                            </div>
                            <br />
                            <h4 class="card-title">Choose the Date and Time of Your Trip</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="m-t-20">The Date of Your Trip (Required)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose"
                                            placeholder="mm/dd/yyyy"> <span class="input-group-append"><span
                                                class="input-group-text">
                                                <i class="mdi mdi-calendar-check"></i></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="m-t-20">The Time of Your Trip (Required)</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                        <input type="text" class="form-control" value="12:00"> <span
                                            class="input-group-append"><span class="input-group-text">
                                                <i class="fa fa-clock-o"></i></span></span>
                                    </div>
                                    <p><em>We have trip every 30 minutes starting from 05:30 AM to 12:30 AM.</em></p>
                                </div>
                                <button type="submit" class="btn btn-dark">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection