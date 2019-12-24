@extends('layouts.app')

@section('content')
<div class="container">
    
                

                <div class="content">
					<div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
						<h1>		
						@can('isAdmin')                
						You are an <mark>admin!</mark>             
					
						@elsecan('isUser')
						You are <mark>a user!</mark>
						
						@endcan
						</h1>
					</div>
                </div>
          
</div>

@endsection
