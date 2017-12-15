counter = {
  'pelangi':0,
  'balon': 0,
  'cicak':0,
  'kebunku':0,
  'kereta':0,
 }
function tampilLagu( id ){
 $('.bloklagu').hide();
 $('#'+id).show();
 counter[id]++;
 $('#c'+id).html(counter[id]);
}
