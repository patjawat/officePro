import React from 'react'

export default function Search() {
    return (
        <div className="card-tools">
            <div className="input-group" style={{ width: 250 }}>
                <input type="text" name="table_search" className="form-control float-right" placeholder="Search" />
                <div className="input-group-append">
                    <button type="submit" className="btn btn-default"><i className="fas fa-search" /></button>
                </div>
            </div>
        </div>

    )
}
