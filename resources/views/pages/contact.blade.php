@extends('main')

@section('title', '| Contact')

@section('content')

            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Me</h1>
                    <hr>
                    <form action="{{ url('contact') }}" method="POST"> 
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label name="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label name="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Type your message here"></textarea>
                        </div>
                        <input type="submit" value="send message" class="btn btn-success">
                    </form>
                </div>
            </div>
@endsection
        