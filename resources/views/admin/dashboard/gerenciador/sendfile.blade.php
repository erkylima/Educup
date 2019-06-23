@php
    if(!empty($_FILES)){
        if(is_uploaded_files($_FILES['image-upload']['tmp_name'])){
            $source = $_FILES['image-upload']['tmp_name'];
            $target_path = asset('assets/img/educup'.$_FILES['image-upload']['name']);
            if(move_uploaded_file($source,$target_path)){
                echo 'Completo';
            }
        }
    }
@endphp
