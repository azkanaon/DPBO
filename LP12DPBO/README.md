# LP12DPBO2023C2
Alasan :
  Menurut saya, MVVM jauh lebih simple daripada MVP, pada MVVM kita tidak memerlukan kontrak yang berupa interface sedangkan pada MVP membutuhkan kontrak, padahal alur dari kedua framework ini sama saja.
Perubahan yang terjadi :
1. Syncronization pindah dan berubah menjadi Main.java (berada diluar MVVM) pada TMD (awalnya ada di view)
2. Display berubah menjadi view (awalnya ada di model)
3. Handler pindah ke viewmodel
4. GameInterface dihapus karena menggunakan MVVM
