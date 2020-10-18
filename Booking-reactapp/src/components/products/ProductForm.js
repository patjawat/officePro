import React from 'react'
import './style.css'
export default function ProductForm() {
    return (

        <form className="form-horizontal p-3">
            <div className="row">
                <div className="col-4">
                    <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">ชื่อสินค้า</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">หมวดหมู่</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div className="col-4">
                <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">Barcode</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">S/N</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div className="col-4">
                <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">ราคาซื้อ</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="inputEmail3" className="col-3 col-form-label">ราคาขาย</label>
                        <div className="col-9">
                            <input type="email" className="form-control" id="inputEmail3" placeholder="Email" />
                        </div>
                    </div>
                </div>
            </div>
        </form>

    )
}
