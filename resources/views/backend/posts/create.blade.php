@extends('backend.master')


@section('styles')
<link rel="stylesheet" href="{{ asset('parsley.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add a new Post</h3>
                </div>
            </div>
            <div class="card card-info">
                <form action="" method="" enctype="multipart/form-data" class="form-horizontal" id="post_form">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter email or phone" name="title"
                                    data-parsley-emailornumber required autofocus data-parsley-trigger="keyup">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="about">Description</label>
                                <textarea id="ckeditor" class="form-control" rows="5" placeholder="Description"
                                    name="description" required></textarea>

                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Post</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('parsley.min.js') }}"></script>
<script>
    var dummyEmail = $("<input data-parsley-type='email' >").parsley();
    var dummyNumber = $("<input data-parsley-length=[10,10] >").parsley();
    Parsley.addValidator('emailornumber',{
        validateString: function(data){
            return dummyEmail.isValid(true,data) || dummyNumber.isValid(true,data);
        },
        messages: {
            'en': 'Given input value is neither a valid email nor a number of 10 characters.',
        },
    });
    $('#post_form').parsley();
</script>
@endsection
