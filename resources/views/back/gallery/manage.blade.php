@extends('back.app')
@section('title','Gallery manage')
@section('content')
<div class="header"  style="background:#890E4F; color:#ffffff; height:55px; margin:0px;">
    <center><p style="padding:20px; font-size:18px; font-family:"> Gallery Manage</h3></p>
</div>
<div style="padding-top:1em;">
    @include('back.alert')

    <div >
        <form action="" class="inline-form" entype="multipart/form-data" id="imageupload">
            <input type="hidden" name="galary_id" value="{{$gallery->id}}">
            <input type="file" id="image" class="w-50" data-role="file" name="image[]" multiple>
            <span class="button primary" onclick="addImage(document.getElementById('imageupload'));">Upload</span>
        </form>
    </div>
    <hr>
    <div class='row' id="galleryHolder">
        @foreach($gallery->Galaryimages as $galleryimage)
            <div class="cell-3" id="image-{{$galleryimage->id}}">
                <div class="img-container thumbnail">
                    <img src="{{ asset($galleryimage->image->filepath) }}" style="height: 100px; width:100%">
                </div>
                <div>
                    <button class="button link" onclick="delImage({{$galleryimage->id}})">Del</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('script')
<script>
    function addImage(ele){
        var formData=new FormData(ele);
        console.log(ele);
        axios.post('{{ route('admin.gallery.img.store')}}',formData)
            .then(function(response){
                console.log(response);
                response.data.data.forEach(image => {
                    htmltext='<div class="cell-3" id="image-'+image.id+'"><div class="img-container thumbnail"><img src="'+image.cdn+'" style="width:100%"></div><div><button class="button link" onclick="delImage('+image.id+')">Del</button></div></div>';
                    $('#galleryHolder').append(htmltext);
                    location.reload();
                });
            })
            .catch(function(error){

            });
    }

    function delImage(id){
        axios.post('{{route('admin.gallery.img.delete')}}',{
            'id':id
        })
        .then(function(response){
               $('#image-'+id).remove();

        })
        .catch(function(error){

        });
    }
</script>
@endsection
