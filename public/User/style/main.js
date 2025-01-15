const form = document.querySelector("#form");
const submitButton = document.getElementById("submit");

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  
  const Nama = document.getElementById("Namaid").value;
  const Kontak = document.getElementById("Kontakid").value;
  const Jenis = document.getElementById("Jenis_hewanid").value;
  const Kondisi = document.getElementById("Kondisi").value;
  const Deskripsi = document.getElementById("Deskripsi").value;
  const my_text = `🐻<b>Formulir Pelaporan Hewan🐻:</b>
  Nama: ${Nama}
  Kontak: ${Kontak}
  Jenis Hewan: ${Jenis}
  Kondisi Hewan: ${Kondisi}
  Deskripsi Hewan: ${Deskripsi}`;

  const token = "6789075344:AAHfguqIaJI_t1usjcmv1hwGLDcc1zmGy0U";
  const chatId = -4267434890;

  const formData = new FormData();
  const fileInput = document.getElementById("formFile");
  const file = fileInput.files[0];

  formData.append("chat_id", chatId);
  formData.append("caption", my_text);
  formData.append("parse_mode", "HTML");
  formData.append("photo", file);

  // Sembunyikan tombol "Iya"
  document.getElementById("submit").classList.add("d-none");
  // Tampilkan tombol loading
  document.getElementById("loadingButton").classList.remove("d-none");

  const url = `https://api.telegram.org/bot${token}/sendPhoto`;

  try {
    const response = await fetch(url, {
      method: "POST",
      body: formData
    });

    if (response.ok) {
      console.log("Message successfully sent!");
      // Tampilkan modal berhasil
      $('#statusSuccessModal').modal('show');
      $('#staticBackdrop').modal('hide');
    } else {
      console.error("Failed to send message:", response.status);
      // Tampilkan modal gagal
      $('#statusErrorsModal').modal('show');
      $('#staticBackdrop').modal('hide');
      
    }
  } catch (error) {
    console.error("Error:", error.message);
    // Tampilkan modal gagal
    $('#statusErrorsModal').modal('show');
    $('#staticBackdrop').modal('hide');
   
  } finally {
    // Sembunyikan tombol loading
    document.getElementById("loadingButton").classList.add("d-none");
    // Tampilkan tombol "Iya"
    document.getElementById("submit").classList.remove("d-none");
  }
});

