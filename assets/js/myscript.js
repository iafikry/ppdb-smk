const flashData = $(".flash-data").data("flash");
console.log(flashData);
//cobain dikasih IF pada flash data, jadi nanti tipenya bisa berbeda-beda, ga cuma success aja, tapi bisa gagal sama info/warning juga
// tanpa harus banyak bikin function sweetAlert
if (flashData) {
	if (flashData == "userNotFound") {
		Swal.fire({
			icon: "error",
			title: "Salah!",
			text: "Pengguna tidak ditemukan",
		});
	} else if (flashData == "salahPassword") {
		Swal.fire({
			icon: "error",
			title: "Salah!",
			text: "Username/Password salah!",
		});
	} else if (flashData == "masuk") {
		Swal.fire({
			icon: "success",
			title: "Selamat datang!",
			text: "Anda berhasil masuk",
		});
	} else if (flashData == "keluar") {
		Swal.fire({
			icon: "success",
			title: "Selamat!",
			text: "Anda berhasil keluar",
		});
	} else if (flashData == "update") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Data telah terubah",
		});
	} else if (flashData == "tersimpan") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Data telah tersimpan",
		});
	} else if (flashData == "dilarang") {
		Swal.fire({
			icon: "error",
			title: "Gagal!",
		});
	} else if (flashData == "daftarUlang") {
		Swal.fire({
			icon: "success",
			title: "Berhasil!",
			text: "Silakan daftar kembali",
		});
	}
}

// tombol logout
$(".btn-logout").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Logout",
		text: "Apakah Anda akan keluar dari sistem?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#0db397",
		confirmButtonText: "Ya, keluar!",
		cancelButtonColor: "#d33",
		cancelButtonText: "Tidak",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
