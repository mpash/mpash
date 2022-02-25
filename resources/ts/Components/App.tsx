import React from "react";
import ReactDOM from "react-dom";
import Home from "./Home";
import NotFound from "./NotFound";
import { BrowserRouter, Routes, Route } from "react-router-dom";

const App = () => (
    <BrowserRouter>
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="*" element={<NotFound />} />
        </Routes>
    </BrowserRouter>
);

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
