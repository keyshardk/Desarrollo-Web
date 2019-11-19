function archivo(evt) {

                  var foto = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = foto[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {ss
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("imagen_pequena").innerHTML = ['<img class="thumb1" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                  }
              }

              document.getElementById('foto').addEventListener('change', archivo, true);