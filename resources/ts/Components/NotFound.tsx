/** @jsx jsx */
import { jsx, css } from "@emotion/core";
import React, { Component } from "react";

export default class NotFound extends Component {
    render() {
        return (
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
    }
}
