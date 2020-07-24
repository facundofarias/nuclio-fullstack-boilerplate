import React from 'react';
import Home from "./pages/home/home.view";
import {AuthContext, AuthContextProvider} from "./contexts/authentication/authentication.context";
import Login from "./pages/login/login.view";
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Redirect
} from "react-router-dom";

function App() {
  return (
      <AuthContextProvider>
          <Router>
              <Switch>
                  <Route path="/login">
                      <Login/>
                  </Route>
                  <PrivateRoute path="/">
                      <Home />
                  </PrivateRoute>
              </Switch>
          </Router>
      </AuthContextProvider>
  );
}

function PrivateRoute(props) {
    const {state} = React.useContext(AuthContext);
    const {children, path} = props;
    return (
        <Route path={path}>
            {state.isAuthenticated ? (children) : <Redirect to={{pathname: "/login"}}/>}
        </Route>
    );
}

export default App;