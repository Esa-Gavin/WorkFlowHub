const isProduction = process.env.NODE_ENV === 'production';

const config = {
    API_BASE_URL: isProduction ? 'https://example.com/api' : 'http://localhost:8000/api',
};

export default config;