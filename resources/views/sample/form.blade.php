@extends('layouts.main', [
'title' => 'Table',
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Form Grid</h4>
            </div>
            <div class="panel-body">
                <form id="movieForm" method="post">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-8">
                                <label class="control-label">Movie title</label>
                                <input type="text" class="form-control firstInput" name="title" />
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">Genre</label>
                                <select class="form-control" name="genre">
                                    <option value="comedy">Comedy</option>
                                    <option value="action">Action</option>
                                    <option value="horror">Horror</option>
                                    <option value="romance">Love</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-4">
                                <label class="control-label">Director</label>
                                <input type="text" class="form-control" name="director" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Writer</label>
                                <input type="text" class="form-control" name="writer" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Producer</label>
                                <input type="text" class="form-control" name="producer" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-6">
                                <label class="control-label">Website Url</label>
                                <input type="url" class="form-control" name="website" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Youtube trailer</label>
                                <input type="url" class="form-control" name="trailer" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Review</label>
                        <textarea class="form-control" name="review" rows="5"></textarea>
                        <span class="help-block no-margin">Minimum 100 characters..</span>
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Terrible
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Watchable
                        </label>
                        <label class="radio-inline">
                            <input type="radio" checked name="inlineRadioOptions" id="inlineRadio3" value="option3"> Best Ever
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection