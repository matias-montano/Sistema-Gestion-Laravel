module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            boxShadow: {
                'glow-blue': '0 0 30px -5px rgba(59, 130, 246, 0.3)',
                'glow-teal': '0 0 30px -5px rgba(45, 212, 191, 0.3)'
            }
        }
    },
    plugins: [],
};