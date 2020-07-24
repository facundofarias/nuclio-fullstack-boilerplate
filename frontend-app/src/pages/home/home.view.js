import React from 'react';
import styles from './home.module.css';
import PinForm from "../../components/pinForm/pinForm.view";
import {AuthContext} from "../../contexts/authentication/authentication.context";

const Home = () => {
    const { state, logout } = React.useContext(AuthContext);
    return (
        <div className={styles.__home_container}>
            <span>{state.user.email}</span>
            <button onClick={logout}>Logout</button>
            <PinForm />
        </div>
    );
};

export default Home;