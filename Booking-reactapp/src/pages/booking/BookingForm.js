import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import { useForm, Controller } from "react-hook-form";
import { inputField, SelectField, SwitchField } from "../../components/Inputs";
import { Button, Card } from "antd";
import { CheckOutlined } from '@ant-design/icons';
import Axios from '../../axios.config'

export default function BookingForm() {
    const items = useSelector(state => state.meettingroom.addBooking);
    const { handleSubmit, control, errors, reset } = useForm();
    const type = ["Student", "Developer", "other"];

    const onSubmit = async (data) => {
        let res = await Axios.post('category', {
            name: data.name,
            type: 'department'
        });
        await reset({ name: '', type: '' })
        // await setCategory([...items, res.data.item]);
    };
    return (
        <div>
            <form onSubmit={handleSubmit(onSubmit)}>
                <div className="row">
                    <div className="col-6">
                        <div className='input-group'>
                            <label className='label'>เรื่อง/หัวข้อ</label>
                            <Controller
                                as={inputField("name")}
                                name='topic'
                                control={control}
                                defaultValue=''
                                rules={{ required: true }}
                            />

                            {errors.name && (
                                <span className='error'>This field is required</span>
                            )}
                        </div>
       
                        <div className='input-group'>
                            <p className="mb-5">

                            <label className='label'>Type of user</label>
                            </p>
                            <Controller
                                as={SelectField(type[0], type)}
                                name='type'
                                control={control}
                                defaultValue={type[0]}
                                rules={{
                                    required: true,
                                }}
                            />
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <br />
                <Button type='primary' htmlType='submit' ><CheckOutlined />บันทึก</Button>
            </form>
        </div>
    )
}
