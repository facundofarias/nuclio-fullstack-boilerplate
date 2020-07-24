export const loadUserFromLocalStorage = () => {
    const user = JSON.parse(localStorage.getItem('user'));
    const token = JSON.parse(localStorage.getItem('token'));
    return {
        user,
        token,
        isAuthenticated: user && token
    }
};

export const saveUserToLocalStorage = (payload) => {
    localStorage.setItem("user", JSON.stringify(payload.user));
    localStorage.setItem("token", JSON.stringify(payload.access_token));
};