@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Create OAuth Clients') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.create') }}">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name">
                                    @error('name')
                                        <div class="msg-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div id="passwordHelpBlock" class="form-text">
                                        Something your users will recognize trust.
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Redirect URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="redirect" id="redirect">
                                    @error('redirect')
                                        <div class="msg-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your application's authorization callback URL.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Confidential</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" name="confidential"/>
                                    @error('redirect')
                                        <div class="msg-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <span class="form-text text-muted">
                                        Require the client to authenticate with a secret. Confidential clients can hold credentials in a secure way without exposing them to unauthorized parties.
                                        Public applications, such as native desktop or JavaScript SPA applications, are unable to hold secrets securely.
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Create OAuth Clients') }}</div>
                    <div class="card-body">
                        Right
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
