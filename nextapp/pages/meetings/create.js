import React from 'react'
import { useRouter } from 'next/router'

import AdminLte3 from "../../layouts/AdminLte3";

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
Create.Layout =Theme;