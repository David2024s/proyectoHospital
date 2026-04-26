document.addEventListener('DOMContentLoaded', () => {
     const roleSelect = document.getElementById('role');
    const allExtraFields = document.querySelectorAll('.extra-fields');

    roleSelect.addEventListener('change', function() {
        // 1. Ocultar todos los campos extras primero
        allExtraFields.forEach(field => {
            field.style.display = 'none';
        });

        // 2. Obtener el valor seleccionado (doctor, enfermera, etc.)
        const selectedRole = this.value;

        // 3. Mostrar el contenedor que coincida con el ID
        const targetDiv = document.getElementById(`fields-${selectedRole}`);
        if (targetDiv) {
            targetDiv.style.display = 'block';
        }
    });

    const now = new Date();
    
    // Formato para input type="date" (YYYY-MM-DD)
    const fechaActual = now.toISOString().split('T')[0];
    
    // Formato para input type="time" (HH:MM)
    const horaActual = now.toTimeString().slice(0, 5);

    // Asignar a Fecha de creación
    document.getElementById('createDate').value = fechaActual;
    document.getElementById('createTime').value = horaActual;



  
});
