import React from "react";
import ReactDOM from "react-dom";

import "./styles.css";

function App() {
    const [darkMode, setDarkMode] = React.useState(getInitialMode());
    React.useEffect(() => {
        localStorage.setItem("dark", JSON.stringify(darkMode));
    }, [darkMode]);

    function getInitialMode() {
        const isReturningUser = "dark" in localStorage;
        const savedMode = JSON.parse(localStorage.getItem("dark"));
        const userPrefersDark = getPrefColorScheme();
        // if mode was saved --> dark / light
        if (isReturningUser) {
            return savedMode;
            // if preferred color scheme is dark --> dark
        } else if (userPrefersDark) {
            return true;
            // otherwise --> light
        } else {
            return false;
        }
        // return savedMode || false;
    }

    function getPrefColorScheme() {
        if (!window.matchMedia) return;

        return window.matchMedia("(prefers-color-scheme: dark)").matches;
    }

}

const rootElement = document.getElementById("root");
ReactDOM.render( < App / > , rootElement);

{ /* https: //www.youtube.com/watch?v=FjDo1mbkNtw&ab_channel=CodeArtistry */ }