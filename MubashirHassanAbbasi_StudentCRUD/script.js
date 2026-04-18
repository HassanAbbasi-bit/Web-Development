function validateForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const course = document.getElementById('course').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name) {
        alert('Name is required.');
        return false;
    }
    if (!email) {
        alert('Email is required.');
        return false;
    }
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }
    if (!course) {
        alert('Course is required.');
        return false;
    }
    return true;
}

function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this student record?')) {
        window.location.href = 'delete.php?id=' + id;
    }
}

function editStudent(id, name, email, course) {
    document.getElementById('studentId').value = id;
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.getElementById('course').value = course;
    document.getElementById('studentForm').action = 'update.php';
}