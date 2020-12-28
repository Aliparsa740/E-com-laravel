@extends('master')
@section("content")

            <div class="container custom-login">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <form action="login" method="POST">
                                    <div class="form-group">
                                        @csrf
                                        <label for="email">Email address:</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password"name="password" class="form-control" placeholder="Enter password" id="pwd"></div><div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">login</button>
                                </form>
                            </div>

                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>


@endsection
