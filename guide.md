# Project
# 	Story
#			Task
#				Interesting

# Pengelolaan KP dan Seminar KP oleh Administrasi Jurusan
#	Admin dapat melihat daftar mahasiswa KP di halaman index
#		Opsi akses backend.interns.index hanya bisa dimiliki oleh admin
#			Cari bagaimana cara agar hanya admin saja yang dapat mengakses fitur tertentu
#		Menambahkan relasi student_id pada table internship dengan relasi student(1)<->(M)internships
#		Menampilkan data dalam bentuk table
#		Data yang ditampilkan adalah student.name, student.nim, internship_agencies.name, internships.start_at, intership.end_at, internships.status
#			Apa saja status dari list mahasiswa KP?
#		Menambahkan CTA ke halaman backend.interns.show untuk setiap student.id
#		Menambahkan fungsional filter dengan tombol filter pada atas table
#			Filter sesuai dengan nama, status, instansi, tanggal mulai, tanggal selesai
#			Cari bagaimana cara membuat fungsional filter
#	Admin dapat melihat halaman detail mahasiswa KP
#		Menampilkan semua data kecuali *seminar* pada table internships berdasarkan student.id
#		Menambahkan CTA ke halaman backend.interns.edit untuk mengedit data mahasiswa KP
#		Menambahkan CTA ke halaman backend.intern-seminars.show untuk melihat data seminar mahasiswa KP
#		Menambahkan button kembali ke halaman backend.interns.index
#	Admin dapat mengedit data mahasiswa KP
#		Menampilkan semua data dari backend.interns.show dalam bentuk editable form
#			Cari bagaimana menampilkan data inisial ke dalam form
#			Form memiliki validasi dan wajib diisi
#		Menambahkan CTA simpan perubahan data
#		Menampilkan modul konfirmasi apakah data benar diubah atau tidak 
#			Cari cara membuat modul konfirmasi
#		Menambahkan tombol kembali ke backend.interns.show 
#		Jika sudah ada data yang berubah ketika kembali, muncul modul konfirmasi ketika klik tombol kembali
#			Cari bagaimana cara mengecek apakah data berubah atau tidak secara real-time melalui JS
#		Update data dari form ke database kemudian kembali ke halaman backend.interns.show
#			backend.interns.update
#	Admin dapat melihat detail seminar KP mahasiswa
#		Menampilkan semua data *seminar* pada table internships berdasarkan student.id
#		Menampilkan table audiens berdasarkan di sebelah table detail seminar
#		Menambahkan CTA ke halaman backed.intern-seminars.edit untuk mengedit seminar KP mahasiswa
#		Menambahkan CTA pada table audiens ke backend.intern-seminars.audience.create untuk menambahkan audiens seminar KP
#		Menambahkan tombol kembali ke backend.interns.show 
#	Admin dapat mengedit data seminar KP mahasiswa
#		Menampilkan semua data dari backend.intern-seminars.show dalam bentuk editable form
#			Cari bagaimana menampilkan data inisial ke dalam form
#			Form memiliki validasi dan wajib diisi
#		Menambahakan CTA simpan perubahan data
#		Menampilkan modul konfirmasi apakah data benar diubah atau tidak
#			Cari cara membuat modul konfirmasi
#		Menambahkan tombol kembali ke backend.intern-seminars.show 
#		Jika sudah ada data yang berubah ketika kembali, muncul modul konfirmasi ketika klik tombol kembali
#			Cari bagaimana cara mengecek apakah data berubah atau tidak secara real-time melalui JS
#		Update data dari form ke database kemudian kembali ke halaman backend.intern-seminars.show
#			backend.intern-seminars.update
#	Admin dapat menambahkan audiens pada seminar KP mahasiswa
#		Menampilkan form menambahkan data audiens berdasarkan table internship.audiences
#		Dropdown-searchable untuk nama mahasiswa yang akan ditambahkan berdasarakan data yang tersedia di table student
#		Menambahkan CTA simpan penambahan data
#		Menampilkan modul konfirmasi data yang akan ditambahkan
#			Cari cara membuat modul konfirmasi
#		Menambahkan tombol kembali ke backend.intern-seminars.show 
#		Insert data dari form ke database kemudian kembali ke halaman backend.intern-seminars.show
#			backend.intern-seminars.audience.store