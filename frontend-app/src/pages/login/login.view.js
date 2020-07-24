import React, { useState } from 'react';
import { AuthContext } from "../../contexts/authentication/authentication.context";
import { useHistory } from "react-router-dom";

const Login = () => {
    const initialState = {
        email: "",
        password: "",
        isSubmitting: false,
        errorMessage: null
    };
    const history = useHistory();
    const { state, login } = React.useContext(AuthContext);

    const [data, setData] = useState(initialState);

    const handleInputChange = event => {
        setData({
            ...data,
            [event.target.name]: event.target.value
        });
    };

    const handleLoginSubmit = event => {
        event.preventDefault();
        setData({
            ...data,
            isSubmitting: true,
            errorMessage: null
        });
        fetch( "http://localhost/api/auth/login", {
            method: "post",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                email: data.email,
                password: data.password
            })
        }).then(res => {
                if (res.ok) {
                    return res.json();
                }
                throw res;
            })
            .then(resJson => {
                console.log(resJson);
                login(resJson);
                history.replace({ pathname: "/" });
            })
            .catch(error => {
                setData({
                    ...data,
                    isSubmitting: false,
                    errorMessage: error.message || error.statusText
                });
            });
    }

    return (
      <div>
          <form onSubmit={handleLoginSubmit}>
              <input name="email" type="text" onChange={handleInputChange}/>
              <input name="password" type="text" onChange={handleInputChange}/>
              <button type="submit">Login</button>
          </form>
      </div>
    );
};

export default Login;