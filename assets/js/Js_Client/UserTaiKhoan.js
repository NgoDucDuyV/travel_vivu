const passwordToggle = document.getElementById('passwordToggle');
            const passwordFields = document.getElementById('passwordFields');

            passwordToggle.addEventListener('change', function() {
                if (this.checked) {
                    passwordFields.classList.add('show');
                } else {
                    passwordFields.classList.remove('show');
                }
            });
            
            if (!passwordToggle.checked) {
                passwordFields.classList.remove('show');
            }