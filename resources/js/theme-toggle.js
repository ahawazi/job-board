document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const root = document.documentElement; // Use <html>

    // Load the user's saved theme preference
    const savedTheme = localStorage.getItem('theme') || 'light';
    if (savedTheme === 'dark') {
        root.classList.add('dark');
    } else {
        root.classList.remove('dark');
    }

    // Toggle the theme on button click
    themeToggle.addEventListener('click', () => {
        const isDarkMode = root.classList.toggle('dark');
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    });
});
