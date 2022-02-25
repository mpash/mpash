/** @jsx jsx */
import { css, jsx } from "@emotion/core";
import React from "react";

const NotFound = () => (
    <div
        css={css`
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        `}
    >
        <img
            alt="Not Found"
            src="/img/404.svg"
            css={css`
                max-width: 500px;
            `}
        />
    </div>
);

export default NotFound;
