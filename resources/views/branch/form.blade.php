@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="row col-12">
            <div class="form-group">
                <label for="business_name_id">Business Name</label>
                <select class="form-control" id="business_name_id">
                    <option selected disabled>Select the Business</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch_name_id">Branch Name</label>
                <input type="text" class="form-control" name= "name" id="branch_name_id" placeholder="Enter the Branch name" required>
            </div>
            <div class="form-group">
                <h6>Timings</h6>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option1" aria-label="...">
                    <label for="working_day_id">Monday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option2" aria-label="...">
                    <label for="working_day_id">Tuesday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option3" aria-label="...">
                    <label for="working_day_id">Wednesday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option4" aria-label="...">
                    <label for="working_day_id">Thursday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option5" aria-label="...">
                    <label for="working_day_id">Friday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option6" aria-label="...">
                    <label for="working_day_id">Saturday</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="working_day" id="working_day_id" value="option7" aria-label="...">
                    <label for="working_day_id">Sunday</label>
                </div>
                <hr>
            </div>
            <div class="form-check">
                <label for="images_id">Images</label>
                <input type="file" multiple class="form-control"  id="images_id" name="images[]">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')

@endsection