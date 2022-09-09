import React from 'react';
import logo from "../../images/logo.svg";

export default function ApplicationLogo({ className }) {
    return (
        <img className={className} src={logo} alt="Logo Chronos"></img>
    );
}
