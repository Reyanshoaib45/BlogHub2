tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#9b87f5',
                secondary: '#7E69AB',
                tertiary: '#6E59A5',
                dark: '#1A1F2C',
                light: '#F6F6F7',
                accent: '#D6BCFA',
                muted: '#8E9196',
                Bloghub: {
                    50: "#f0f9ff",
                    100: "#e0f2fe",
                    200: "#bae6fd",
                    300: "#7dd3fc",
                    400: "#38bdf8",
                    500: "#0ea5e9",
                    600: "#0284c7",
                    700: "#0369a1",
                    800: "#075985",
                    900: "#0c4a6e"
                },
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                display: ['Inter', 'sans-serif']
            },
            boxShadow: {
                'soft': '0 5px 15px rgba(0, 0, 0, 0.05)',
                'hover': '0 10px 25px rgba(155, 135, 245, 0.2)'
            },
            animation: {
                "fade-in": "fadeIn 0.5s ease-out",
                "scale-in": "scaleIn 0.3s ease-out",
                "slide-in": "slideInLeft 0.6s ease-out",
                "float": "float 6s ease-in-out infinite",
                "pulse-soft": "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite"
            },
            keyframes: {
                fadeIn: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    }
                },
                scaleIn: {
                    '0%': {
                        transform: 'scale(0.95)',
                        opacity: '0'
                    },
                    '100%': {
                        transform: 'scale(1)',
                        opacity: '1'
                    }
                },
                slideInLeft: {
                    '0%': {
                        transform: 'translateX(-20px)',
                        opacity: '0'
                    },
                    '100%': {
                        transform: 'translateX(0)',
                        opacity: '1'
                    }
                },
                float: {
                    '0%, 100%': {
                        transform: 'translateY(0)'
                    },
                    '50%': {
                        transform: 'translateY(-10px)'
                    }
                },
                pulse: {
                    '0%, 100%': {
                        opacity: '1'
                    },
                    '50%': {
                        opacity: '0.7'
                    }
                }
            }
        }
    }
}
