import React from 'react'
import { useRouter } from 'next/router'

import BackendLayout from "../../layouts/BackendLayout";

export default function Create() {
    const router = useRouter()
    const { id } = router.query
    return (
        <div>
            create
            <p>Post: {id}</p>
        </div>
    )
}
Create.Layout = BackendLayout;