import React from 'react'
import BackendLayout from "../layouts/BackendLayout";
import { useRouter } from 'next/router'
import List from '../components/pos/list'
export default function Pos() {
    const router = useRouter()

    return (
        <div>
            <button className="btn btn-primary mb-3" onClick={()=>{router.push('/products')}}>+ สินค้า</button>

            <div className="row">
                <div className='col-8'>
                    <List />

                </div>
                <div className='col-4'>
                    <div className="card">
                        <div className="card-header">
                            ดำเนินการ
  </div>
                        <div className="card-body">
                            <h4 className="card-title">Title</h4>
                            <p className="card-text">Text</p>
                        </div>
                        <div className="card-footer text-muted">
                            <div className="float-right">
                                <button className="btn btn-success">Save</button>{' '}
                                <button className="btn btn-secondary">Print</button>{' '}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    )
}
Pos.Layout = BackendLayout;
