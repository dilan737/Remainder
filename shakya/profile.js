
function displayImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
      const output = document.getElementById('profileDisplay');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.files[0]);
  }