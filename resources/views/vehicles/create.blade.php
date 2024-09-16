@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="card">
        <h5 class="card-header">Create new vehicles</h5>
        <div class="card-body">
            <form action="{{route('vehicles.store')}}" method="POST" >
                @csrf
                @method('post')

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Brand</label>
                    <div class="col-sm-10">
                        <input type="text" name="brand" class="form-control @error('brand')is-invalid @enderror" id="inputEmail3 py-6" placeholder="Enter your vehicle brand's name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Model</label>
                    <div class="col-sm-10">
                        <input type="text" name="model" class="form-control" id="inputPassword3" placeholder="Enter your vehicle model's name">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0"  >Energy</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="energy" id="gridRadios1" value="option1" >
                                <label class="form-check-label" for="gridRadios1">
                                    Hybrid
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="energy" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Diesel
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="energy" id="gridRadios3" value="option3" >
                                <label class="form-check-label" for="gridRadios3">
                                    Electric
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="availability">
                        <label class="form-check-label" for="flexCheckChecked">
                            Availability
                        </label>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
