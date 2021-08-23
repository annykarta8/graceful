   <div class="box">
       <div class="list">
           <div class="content">
               @foreach($data as $data)
               <div class="img"><img src='/image/{{ $data->image }}' class="align-right slide-in">
               </div>
               @endforeach
           </div>
       </div>
   </div>
