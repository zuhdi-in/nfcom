// function tambah(){
//     //tangkap id form
//     var frm = document.getElementById('calcForm');
//     var a1 = parseFloat(frm.angka1.value);
//     var a2 = parseFloat(frm.angka2.value);
//     var total = a1 + a2; //rumus
//     frm.hasil.value = total; //penempatan hasil
// }

// function kurang(){
//     //tangkap id form
//     var frm = document.getElementById('calcForm');
//     var a1 = parseFloat(frm.angka1.value);
//     var a2 = parseFloat(frm.angka2.value);
//     /*
//     var tombol = frm.tombol.value;
//     switch (tombol) {
//         case 'btn_tambah':
//             if (isNaN(a1) || isNaN(a2)) {
//                 alert("Harap masukkan angka!!");
//             }    
//             else {
//                 var total = a1 + a2; //rumus
//                 frm.hasil.value = total; //penempatan hasil 
//             } 
//             break;
//         case 'btn_kurang':
//             if (isNaN(a1) || isNaN(a2)) {
//                 alert("Harap masukkan angka!!");
//             }    
//             else {
//                 var total = a1 - a2; //rumus
//                 frm.hasil.value = total; //penempatan hasil 
//             } 
//             break;
    
//         default:
//             break;
//     }
//     */
//     if (isNaN(a1) || isNaN(a2)) {
//         alert("Harap masukkan angka!!");
//     }    
//     else {
//        var total = a1 - a2; //rumus
//        frm.hasil.value = total; //penempatan hasil 
//     } 
    
// }

// function pangkat(){
//     //tangkap id form
//     var frm = document.getElementById('calcForm');
//     var a1 = parseFloat(frm.angka1.value);
//     var a2 = parseFloat(frm.angka2.value);
//     var total = Math.pow(a1,a2); //rumus
//     frm.hasil.value = total; //penempatan hasil
// }

function hitung(operator) {
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    switch (operator) {
        case 'btn_tambah':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 + a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_kurang':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 - a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_kali':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 * a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_bagi':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 / a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_pangkat':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 ** a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
    
        default:
            break;
    }
}