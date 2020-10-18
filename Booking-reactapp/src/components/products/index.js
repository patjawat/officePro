import React from 'react'
import ProductForm from './ProductForm'
import ProductList from './ProductList'
import Search from './search'
import './style.css'
import ProductModal from './ProductModal'

export default function Index() {
    return (
        <div className="card">
            <div className="card-header">
                <h3 className="card-title">จัดการสินค้า</h3>
                <Search />
            </div>
            <div className="card-body p-0">
                <ProductForm />
                <ProductList />
            </div>
            <div className="card-footer">
                <ul class="pagination pagination-sm m-0 float-left">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>

                <div className="float-right">
                    <button type="submit" className="btn btn-success "><i className="fas fa-check"></i> บันทึก</button>{'  '}
                    <button type="submit" className="btn btn-secondary"><i className="fas fa-redo"></i> ยกเลิก</button>
                </div>
                <div className="float-right mr-1">
                    <ProductModal />
                   
                </div>
            </div>
        </div>
    )
}
