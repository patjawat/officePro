import React, { useState, useEffect } from 'react'
import * as rdd from 'react-device-detect';
import { useSelector, useDispatch } from 'react-redux'

import axios from 'axios'
import { api } from '../service/config'
import Paginator from 'react-hooks-paginator';

const people = [
  "Siri",
  "Alexa",
  "Google",
  "Facebook",
  "Twitter",
  "Linkedin",
  "Sinkedin"
];

function Home() {

  const pageLimit = 10;
  const [offset, setOffset] = useState(0);
  const [currentPage, setCurrentPage] = useState(1);
  const [data, setData] = useState([]);
  const [currentData, setCurrentData] = useState([]);
 


  // useEffect(async () => {
    useEffect(() => {
   axios.get('https://jsonplaceholder.typicode.com/posts').then((res)=>{
     setData(res.data)

   });
    
  }, []);
 
  useEffect(() => {
    setCurrentData(data.slice(offset, offset + pageLimit));
  }, [offset, data]);

  // ###
  const [searchTerm, setSearchTerm] = useState("");
  const [searchResults, setSearchResults] = useState([]);
  
  const handleChange = event => {
     setSearchTerm(event.target.value);
   };
  useEffect(() => {
     const results = people.filter(person =>
       person.toLowerCase().includes(searchTerm)
     );
     setSearchResults(results);
   }, [searchTerm]);

   //#####
   
  return (
    <div>
 <input
        type="text"
        placeholder="Search"
        value={searchTerm}
        onChange={handleChange}
      />
      <ul>
         {searchResults.map(item => (
          <li>{item}</li>
        ))}
      </ul>

<div className="row mt-5">
        <div className="col-12">
          <div className="card">
            <div className="card-header">
              <h3 className="card-title">Fixed Header Table</h3>
              <div className="card-tools">
                <div className="input-group input-group-sm" style={{ width: 150 }}>
                  <input type="text" name="table_search" className="form-control float-right" placeholder="Search" />
                  <div className="input-group-append">
                    <button type="submit" className="btn btn-default"><i className="fas fa-search" /></button>
                  </div>
                </div>
              </div>
            </div>
            {/* /.card-header */}
            <div className="card-body table-responsive p-0" style={{ height: 400 }}>
              <table className="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                </thead>
                <tbody>

                  {currentData.map((item, index) => (
                    <tr key={index}>
                      <td>{index+1}</td>
                      <td>{item.title}</td>
                      <td>11-7-2014</td>
                      <td><span className="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  ))}
                </tbody>
              </table>
            </div>
            <div class="card-footer clearfix">
            <Paginator
                totalRecords={data.length}
                pageLimit={pageLimit}
                pageNeighbours={2}
                setOffset={setOffset}
                currentPage={currentPage}
                setCurrentPage={setCurrentPage}
              />
              </div>
          </div>
        </div>
      </div>
      
    </div>
  );
        }


export default Home

