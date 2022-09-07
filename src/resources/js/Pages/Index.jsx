import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';
import Chronometer from '@/Components/Chronometer.jsx';

export default function Index(props) {
    return (
        <>
            <Head title="Crono" />
            <div id="wrapper" className="flex flex-col h-screen w-screen">
                <div id="rightBar" className="w-screen basis-8">
                    {props.auth.user ? (
                        <Link href={route('dashboard')} className="text-sm text-gray-700 dark:text-gray-500 underline">
                            Dashboard
                        </Link>
                    ) : (
                        <>
                            <Link href={route('login')} className="text-sm text-gray-700 dark:text-gray-500 underline">
                                Log in
                            </Link>

                            <Link href={route('register')} className="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                Register
                            </Link>
                        </>
                    )}
                </div>

                <div id="main" className="grow w-screen">
                        <Chronometer />
                </div>
            </div>
        </>
    );
}
