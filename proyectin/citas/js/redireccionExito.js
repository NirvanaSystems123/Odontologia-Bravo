        // Redirección después de 5 segundos (5000 milisegundos)
        let countdown = 3;
        let countdownElement = document.getElementById('countdown');
        
        function updateCountdown() {
            countdown -= 1;
            countdownElement.textContent = countdown;
            
            if (countdown <= 0) {
                window.location.href = "../html/bienvenido.php"; // Cambia la URL de redirección
            } else {
                setTimeout(updateCountdown, 1000); // Actualiza cada 1 segundo
            }
        }

        setTimeout(updateCountdown, 1000);