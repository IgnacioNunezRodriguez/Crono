import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';
import Chronometer from '@/Components/Chronometer.jsx';
import Logo from "@/Components/ApplicationLogo";




export default function Index(props) {
    return (
        <>
            <Head title="Crono" />
            <div id="wrapper" className="flex flex-col justify-center h-screen w-screen">
                <div id="topbar" className="flex flex-row justify-end p-4">
                    <div id="rightBar" className="">
                        {props.auth.user ? (
                            <Link href={route('dashboard')} className="rounded-full text-sm text-gray-50 dark:text-gray-50 bg-slate-500 px-4 py-2">
                                Dashboard
                            </Link>
                        ) : (
                            <>
                                <Link href={route('login')} className="rounded-full text-sm text-gray-50 dark:text-gray-50 bg-slate-500 px-4 py-2">
                                    Log in
                                </Link>

                                <Link href={route('register')} className="rounded-full ml-4 text-sm text-gray-50 dark:text-gray-500 bg-slate-500 px-4 py-2">
                                    Register
                                </Link>
                            </>
                        )}
                    </div>
                </div>
                <div id="logo" className="flex flex-row justify-center mx-8 bg-red-600">
                    <Logo />
                </div>

                <div id="main" className="grow w-screen">
                        <Chronometer />
                </div>
            </div>
        </>
    );
}
