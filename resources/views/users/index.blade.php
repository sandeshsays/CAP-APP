@extends('layout')
   
@section('content')

  

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    

   
  <table class="table table-dark">
        <tr>
            <th>नं.</th>
            <th>प्रयोगकर्ताहरू</th>
            <th>कार्य</th>
            <th>Password Reset</th>
           
            
           

            
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name}}</td>
            <td>
            <div class="flex justify-end">
     <div class="flex space-x-2">
           <a href="{{ route('users.show', $user->id) }}"class="btn btn-primary">भूमिका</a>
             
             <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"  method="POST" action="{{ route('users.destroy', $user->id) }}"onsubmit="return confirm('Are you sure?');">
                                     @csrf
                                    @method('DELETE')
                                 <button type="submit" class="btn btn-danger"> मेटाउन</button>
                            </form>
                       </div>
</div>
<div>
            </td>
            <td>
                <a href="{{ route('users.edit' , $user->id ) }}" class="btn btn-primary">Change password</a>

            </td>
</div>
            
         </tr>
        
        
        @endforeach
    
    </table>





  


@endsection