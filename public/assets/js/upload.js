
    document.addEventListener('alpine:init', () => {
        Alpine.data('updloadData', (x) => ({
            dataFile : allFile,
            tugas_id : x.id,
            SubmitImage(key, formId){
                let myForm = document.getElementById(formId)
                let outputValidate = []
                // console.log(this.dataFile[key])
                for (let i = 0; i < this.dataFile[key].file.length; i++) {
                    if(this.dataFile[key].file[i].image){
                        this.dataFile[key].file[i].validate = ''
                        outputValidate.push(true)
                    }else{
                        outputValidate.push(false)
                        this.dataFile[key].file[i].validate = 'File wajib di isi'
                    }
                }
               let cariValidate =  outputValidate.filter(val => val == false)
               if(cariValidate.length == 0){
                 myForm.submit()
               }
            },
            init(){
                fetch(`/mandor/get_tugas/${this.tugas_id}`,{
                    method : 'GET',
                    headers : {
                        'Content-Type' : 'application/json'
                    }
                }).then(response => response.json())
                .then(data => {
                    if(data[0].tugas.awalan){
                        this.dataFile[0].submited = true
                        for (let i = 0; i < data.tugas.awalan.length; i++) {
                            this.dataFile[0].file[i].preview = ''
                        }
                    }
                })

            },
            openImage(event, key){
                const file = event.target.files[0];
                const maxWidth = 640; // Maximum width of the resized video
                const maxHeight = 480; // Maximum height of the resized video
                const quality = 0.8; // Compression quality (0.0 to 1.0)

                if(event.target.files[0]){
                    this.dataFile[key.key1].file[key.key2].preview = URL.createObjectURL(event.target.files[0])
                }

                if(event.target.files[0].type.includes('video')){
                    resizeAndCompressVideo(file, maxWidth, maxHeight, quality, function(compressedBlob) {
                      console.log('Compressed video size:', compressedBlob.size);
                    });
                }

                if(event.target.files[0].type.includes('image')){
                    convertImageQuality(file, 'image/jpeg', quality, function(convertedImage) {
                        console.log('Converted image:', convertedImage);
                      });
                }


            },
        }))
    })

    function resizeAndCompressVideo(inputFile, maxWidth, maxHeight, quality, callback) {
        // console.log(inputFile)
        const video = document.createElement('video');
        const reader = new FileReader();

        reader.onload = function(event) {
          video.src = event.target.result;
          video.addEventListener('loadedmetadata', function() {
            const width = video.videoWidth;
            const height = video.videoHeight;

            const aspectRatio = width / height;
            let newWidth = width;
            let newHeight = height;

            // Resize the video while maintaining aspect ratio
            if (width > maxWidth) {
              newWidth = maxWidth;
              newHeight = newWidth / aspectRatio;
            }

            if (newHeight > maxHeight) {
              newHeight = maxHeight;
              newWidth = newHeight * aspectRatio;
            }

            const canvas = document.createElement('canvas');
            canvas.width = newWidth;
            canvas.height = newHeight;
            const ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, newWidth, newHeight);

            // Convert canvas to a Blob with specified quality
            canvas.toBlob(function(blob) {
              callback(blob);
            }, 'video/mp4', quality);
          });
        };

        reader.readAsDataURL(inputFile);
      }

    function convertImageQuality(inputImage, outputFormat, quality, callback) {
        const image = new Image();
        // console.log(inputImage)
        image.onload = function() {
          const canvas = document.createElement('canvas');
          const ctx = canvas.getContext('2d');

          canvas.width = image.width;
          canvas.height = image.height;

          ctx.drawImage(image, 0, 0);

          // Convert canvas to data URL with specified quality
          const convertedImage = canvas.toDataURL(outputFormat, quality);
            console.log(convertedImage)
          callback(convertedImage);
        };

        image.src = inputImage;
      }


    function convertFileSize(sizeInBytes) {
        if (sizeInBytes == 0 || sizeInBytes == null) {
          return '0 B';
        }
        const k = 1024;
        const sizes = ['B', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(sizeInBytes) / Math.log(k));
        const convertedSize = parseFloat((sizeInBytes / Math.pow(k, i)).toFixed(2));
        return `${convertedSize} ${sizes[i]}`;
    }

    let allFile = [
        {
            title : 'Awalan',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Proses Kemarik',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Kedalaman',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Pengecatan',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Penembokan',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Instalasi Mesin',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Pengacian',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
        {
            title : 'Simulasi',
            sub_title : 'Proses pengukuran dan persiapan bahan bahan',
            submitForm : '/mandor/upload_awalan',
            submited : false,
            file : [
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
                {
                    preview : '/assets/img/avatars/mandor.png',
                    image : null,
                    size : null,
                    validate : ''
                },
            ]
        },
    ]

    // Function to resize and compress a video


