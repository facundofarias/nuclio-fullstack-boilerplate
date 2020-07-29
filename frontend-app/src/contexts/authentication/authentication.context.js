import React from "react";
import {loadUserFromLocalStorage, saveUserToLocalStorage} from "./authentication.services";

export const AuthContext = React.createContext();

const initialState = {
    ...loadUserFromLocalStorage(),
};

const reducer = (state, action) => {
    switch (action.type) {
        case "LOGIN":
            saveUserToLocalStorage(action.payload);
            return {
                ...state,
                isAuthenticated: true,
                user: action.payload.user,
                token: action.payload.auth_token
            };
        case "LOGOUT":
            localStorage.clear();
            return {
                ...state,
                isAuthenticated: false,
                user: null,
                token: null,
            };
        default:
            return state;
    }
};

export const AuthContextProvider = ({ children }) => {
    const [state, dispatch] = React.useReducer(reducer, initialState);

    const login = (loginPayload) => {
        dispatch({
            type: "LOGIN",
            payload: loginPayload
        })
    }
    const logout = () => {
        dispatch({
            type: "LOGOUT"
        })
    };

    return (
        <AuthContext.Provider
            value={{
                state,
                dispatch,
                logout,
                login,
            }}
        >
            {children}
        </AuthContext.Provider>
    )
}