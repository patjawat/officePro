import React from 'react'
import { Table, Tag, Space } from 'antd';

const { Column, ColumnGroup } = Table;

export default function ListItems({ data }) {

  const datas = [
    {
      key: '1',
      firstName: 'John',
      lastName: 'Brown',
      age: 32,
      address: 'New York No. 1 Lake Park',
      tags: ['nice', 'developer'],
    },
    {
      key: '2',
      firstName: 'Jim',
      lastName: 'Green',
      age: 42,
      address: 'London No. 1 Lake Park',
      tags: ['loser'],
    },
    {
      key: '3',
      firstName: 'Joe',
      lastName: 'Black',
      age: 32,
      address: 'Sidney No. 1 Lake Park',
      tags: ['cool', 'teacher'],
    },
  ];

  return (
    <div>
      <Table dataSource={data}>
        <Column title="รายการแผนก/หน่วยงาน" dataIndex="name" key="name" />
        <Column
          title="Action"
          key="action"
          render={(text, record) => (
            <Space size="middle">
              <a onClick={()=>{
                console.log(record)
              }}> Edit {record.name}</a>
              <a onClick={()=>{
                console.log(record)
              }}>Delete</a>
            </Space>
          )}
        />
      </Table>
    </div>
  )
}

